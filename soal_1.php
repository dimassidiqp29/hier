<h4 style="margin-left: 28%; text-transform: uppercase;">program untuk mencari huruf yang pertama duplikat.</h4>
<hr>
<br>
<?php 
    // HURUF STATIS
	$huruf   = "ABCDEBE";
	$teks    = '<h4>Huruf Yang Sama Dari Huruf '.$huruf.'</h4>';
	echo $teks;
    $panjang     = strlen($huruf);
    $array_huruf = [];
    for($i = 0;$i<$panjang;$i++)
    {
        $next = $i;
        $array_huruf[] = substr($huruf,$next,1);
    }

    $array = [];

    for($i = 0;$i<count($array_huruf);$i++)
    {
        $current = $array_huruf[$i];
        $total   = 0;
        for($y = 0;$y<count($array_huruf);$y++)
        {
            if($current == $array_huruf[$y])
            {
                $total++;
            }
        }   

        $array[] = [
            'huruf'=>$current,
            'total'=>$total,
        ];

        $total = 0;
    }

    foreach($array as $field)
    {
        if($field['total'] > 1)
        {
            echo $field['huruf'];
            return false;
        }
    }

 ?>