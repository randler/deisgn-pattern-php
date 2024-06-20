<?php

use App\Structural\Decorator\Elements\TextInput;
use App\Structural\Decorator\Filters\DangerousHTMLTagsFilter;
use App\Structural\Decorator\Filters\PlainTextFilter;
use App\Structural\Decorator\Format\MarkdownFormat;

describe('Decorator', function () {
    it('should decorate text with plain text filter', function () {
        $input = new TextInput();
        $dangerousComment = <<<HERE
                Hello! Nice blog post!
                Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
                <script src="http://www.iwillhackyou.com/script.js">
                performXSSAttack();
                </script>
            HERE;
        $formatted = $input->formatText($dangerousComment);

        $expected = <<<HERE
                Hello! Nice blog post!
                Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
                <script src="http://www.iwillhackyou.com/script.js">
                performXSSAttack();
                </script>
            HERE;
        expect($formatted)
            ->toBe($expected);

    });

    it('should decorate text with filtered plain text filter', function () {
        $input = new TextInput();
        $dangerousComment = <<<HERE
            Hello! Nice blog post!
            Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
            <script src="http://www.iwillhackyou.com/script.js">
            performXSSAttack();
            </script>
        HERE;
        
        $filteredInput = new PlainTextFilter($input);
        $formatted = $filteredInput->formatText($dangerousComment);
        
        $expected = <<<HERE
            Hello! Nice blog post!
            Please visit my homepage.
            
            performXSSAttack();
            
        HERE;

        expect($formatted)
            ->toBe($expected);
    });


    it('should decorate text with Markdown text filter', function () {
        $text = new TextInput();
        $dangerousForumPost = <<<HERE
            # Welcome

            This is my first post on this **gorgeous** forum.

            <script src="http://www.iwillhackyou.com/script.js">
            performXSSAttack();
            </script>
            HERE;
        $markdown = new MarkdownFormat($text);
        $filteredInput = new DangerousHTMLTagsFilter($markdown);

        $filtered = $filteredInput->formatText($dangerousForumPost);

        $expected = <<<HERE
            <h1>Welcome</h1>

            <p>This is my first post on this <strong>gorgeous</strong> forum.</p>

            <p></p>
            HERE;

        expect($filtered)
            ->toBe($expected);
    });
});