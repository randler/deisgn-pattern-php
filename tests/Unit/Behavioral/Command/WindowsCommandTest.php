<?php

use App\Behavioral\Command\FileInvoker;
use App\Behavioral\Command\Receiver\CloseFileCommand;
use App\Behavioral\Command\Receiver\OpenFileCommand;
use App\Behavioral\Command\Receiver\WriteFileCommand;
use App\Behavioral\Command\WindowsFileSystem;

describe('Command Test FileSystem', function(){
    it("Windows Open FileSystem", function(){
        $openFile = new OpenFileCommand(new WindowsFileSystem());

        $invoker = new FileInvoker($openFile);
        
        expect($invoker->execute())
            ->toBe("Windows file file.bat is open");
    });

    it("Windows Write FileSystem", function(){
        $openFile = new WriteFileCommand(new WindowsFileSystem(), "Hello World");

        $invoker = new FileInvoker($openFile);

        expect($invoker->execute())
            ->toBe("Windows file file.bat is writing of the contents: Hello World");
    });

    it("Windows Close FileSystem", function(){
        $openFile = new CloseFileCommand(new WindowsFileSystem());

        $invoker = new FileInvoker($openFile);

        expect($invoker->execute())
            ->toBe("Windows file file.bat is closed");
    });

});
