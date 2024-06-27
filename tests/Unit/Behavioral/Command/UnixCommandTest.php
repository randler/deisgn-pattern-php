<?php

use App\Behavioral\Command\FileInvoker;
use App\Behavioral\Command\Receiver\CloseFileCommand;
use App\Behavioral\Command\Receiver\OpenFileCommand;
use App\Behavioral\Command\Receiver\WriteFileCommand;
use App\Behavioral\Command\UnixFileSystem;

describe('Command Test FileSystem', function(){
    it("Unix Open FileSystem", function(){
        $openFile = new OpenFileCommand(new UnixFileSystem());

        $invoker = new FileInvoker($openFile);

        expect($invoker->execute())
            ->toBe("Unix file file.sh is open");
    });

    it("Unix Write FileSystem", function(){
        $openFile = new WriteFileCommand(new UnixFileSystem(), "Hello World");

        $invoker = new FileInvoker($openFile);

        expect($invoker->execute())
            ->toBe("Unix file file.sh is writing of the contents: Hello World");
    });

    it("Unix Close FileSystem", function(){
        $openFile = new CloseFileCommand(new UnixFileSystem());

        $invoker = new FileInvoker($openFile);

        expect($invoker->execute())
            ->toBe("Unix file file.sh is closed");
    });
});
