<?php

//? file system

$file = "quotes.txt";

if (file_exists($file)) {

    //? read file
    echo readfile($file) . "<br />";

    //? copy file
    copy($file, "readme.txt");

    //? absolute path
    echo realpath($file) . "<br />";

    //? file size
    echo filesize($file) . "<br />";

    //? rename file
    rename($file, "test.txt");
} else {
    echo "file does not exist";
}

//? make directory

mkdir("quotes");

$file2 = "test.txt";

//? opening a file for reading
$handle = fopen($file2, "a+");

//? read the file
echo fread($handle, filesize($file2));
echo fread($handle, 200);

//? read a single line
echo fgets($handle);

//? read a single character
echo fgetc($handle);

//? writing to a file
fwrite($handle, "\n This is a new sentence");

//? closing a file
fclose($handle);

//? removing a file
unlink($file2);

// r	Open a file for read only. File pointer starts at the beginning of the file
// w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x	Creates a new file for write only. Returns FALSE and an error if file already exists
// r+	Open a file for read/write. File pointer starts at the beginning of the file
// w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x+	Creates a new file for read/write. Returns FALSE and an error if file already exists