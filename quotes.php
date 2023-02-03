<!DOCTYPE html>

<html>

<head>
        <title>quotes csv</title>
        <meta charset="utf-8" />
        <style>
            #container{
                margin:0 auto;
                width:80%;
                overflow:auto;
            }
            table.gridtable {
                margin:0 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:14px;
                color:#333333;
                border-width: 1px;
                border-color: #666666;
                border-collapse: collapse;
                text-align: center;
            }
            table.gridtable th {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #ff3030;
            }
            table.gridtable td {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
            }
        </style>
</head>

<body>

    <div class="container" id="container">
        <table class="gridtable">
            <thead>
                <tr>
                    <th>Quote</th>
                    <th>Source</th>
                    <th>DOB-DOD</th>
                    <th>Wikipedia Link</th>
                     <th>Image</th>
                     <th>Category</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    if (($csvfile = fopen("quotes.csv", "r")) !== FALSE) {
                        while (($csvdata = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
                            $colcount = count($csvdata);
                            echo '<tr>';

                                    echo '<td>'.$csvdata[0].'</td>';
                                    echo '<td>'.$csvdata[1].'</td>';
                                    echo '<td>'.$csvdata[2].'</td>';
                                    echo '<td>'.$csvdata[3].'</td>';
                                    echo '<td><img src="' . $csvdata[4].' "width="100" height="100"></td>';
                                    echo '<td>'.$csvdata[5].'</td>';
                            }
                            echo '</tr>';
                        }
                        fclose($csvfile);
                 
                ?>
            </tbody>
           </table>
    </div>

</body>
</html>