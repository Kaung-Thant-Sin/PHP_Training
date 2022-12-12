<link rel="stylesheet" href="css/style.css">
<?php
//.txt file read
echo "<h2>Reading the txtfile.txt document here</h2>";

$myfile = fopen("file/sample.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("file/sample.txt"));
fclose($myfile);
echo "<br>";
echo "<br>";
echo "<hr>";

//.csv file read
echo "<h2>I am .csv file</h2>";
if (($open = fopen('file/sample.csv', 'r')) !== FALSE) {
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
        $array[] = $data;
    }
    fclose($open);
}

echo "<pre>";
print_r($array);
echo "<?pre>";
echo "<br>";
echo "<hr>";

//.doc file read
echo "<h2>I am .doc file</h2>";
$myfile = fopen("file/sample.doc", "r") or die("Unable to open file!");
while (!feof($myfile)) {
    echo "<p class='para'>" . fgets($myfile) . "</p><br>";
}
fclose($myfile);
echo "<br>";
echo "<hr>";

//excel file read
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Full path of the file to read
$inputFileName = 'file/sample.xlsx';

// Create the reader object
$reader = new Xlsx();

// Load the file to read
$spreadsheet = $reader->load($inputFileName);

// Get the active sheet
$sheetData = $spreadsheet->getActiveSheet()->toArray();
$i = 1;
//unset($sheetData[0]);
echo "<table>";
foreach ($sheetData as $cell) {
?>
    <tr>
        <td><?php echo "$cell[0]" ?></td>
        <td><?php echo "$cell[1]" ?></td>
        <td><?php echo "$cell[2]" ?></td>
        <td><?php echo "$cell[3]" ?></td>
    </tr>
<?php
    $i++;
}
?>
</table>