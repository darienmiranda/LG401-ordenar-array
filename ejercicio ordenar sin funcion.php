<?php
  function freixenet ($num)
    { 
      for($i=1;$i<count($num);$i++)
    {
      for($j=0;$j<count($num)-$j++)
      {
        if($num[$j>$num[$j+1]])
        {

          $k=$num[$j+1];
          $num[$j+1=$num[$j]];
          $num[$j]=$k;

        }

      }

      return $num;
    }

    $desordenados=array(7,6,5,4,3,2,1);

    echo 'valores dados:'.PHP_EOL;
    for($i=0;$i<count($desordenados);$i++)
      echo $desordenados[$i.PHP_EOL];

      $desordenados=freixenet ($desordenados);

      echo 'valores ordenados:'. PHP.EOL;
      for($i=0;$i<count($desordenados);$i++)
      echo $desordenados[$i].PHP_EOL;
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MORIIS</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">Laragon</div>
     
                <div class="info"><br />
                      <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                      PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
                      Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />

                </div>
                <div class="opt">
                  <div><a title="Getting Started" href="https://laragon.org/docs">Getting Started</a></div>
                </div>
            </div>

        </div>
    </body>
</html>