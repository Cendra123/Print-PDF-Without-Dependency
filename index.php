<!-- https://stackoverflow.com/questions/16649943/css-to-set-a4-paper-size -->
<!-- https://www.w3schools.com/html/html_tables.asp -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- <link href="a4.css" rel="stylesheet"> -->
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: white;
            font: 12pt "Tahoma";
        }
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .page {
            width: 21cm;
            min-height: 29.7cm;
            padding: 0cm;
            margin: 1cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .subpage {
            padding: 0cm;
            border: 5px white solid;
            height: 256mm;
            outline: 0cm #FFEAEA solid;
        }

        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }

      td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
      }

      tr:nth-child(even) {
          background-color: #dddddd;
      }

  </style>
</head>
<body>
    <div class="book">
        <div class="page">

            <div class="subpage">
                <h1 style="text-align: center">Title</h1>
                <table style="width:100%">
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                </tr>
                <tr>
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                </tr>
            </table>
        </div>    
    </div>
 <!--        <div class="page">
            <div class="subpage">Page 2/2</div>    
        </div>
    -->   </div>

    <script>
        // window.print();
    </script>
</body>
</html>