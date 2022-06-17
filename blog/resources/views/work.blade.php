@extends('index')

@section('mainTitle')Work @endsection

@section('main')
    <h1>Work</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus ante. Aliquam ut sapien eu nisl molestie ultricies sit amet posuere velit. Aliquam viverra nisl sed arcu gravida, eu consectetur justo aliquet. Aliquam vitae commodo odio. Maecenas scelerisque metus tortor, ut tempor tortor vestibulum ac. Suspendisse ac nisi magna. Maecenas pellentesque sem suscipit vestibulum ullamcorper. Morbi dignissim ligula quis ultrices laoreet. Quisque eget pretium libero.
    </p>
@section('aside')
    @parent
    <?php
    $url = 'https://www.cbr.ru/scripts/XML_daily.asp';
    $file = simplexml_load_file($url);

   function valute ($data, $file) {

        $id = $data;
        $xml = $file->xpath("//Valute[@ID='$id']");
        $name = strval($xml[0]->Name);
        $value = strval($xml[0]->Value);
        echo '<i>'. $name ." $value". '</i>';
    }
    valute ('R01235', $file);
    valute ('R01239', $file);

    $url = 'https://iss.moex.com/iss/history/engines/stock/markets/shares/boards/tqbr/securities.xml';
    $file = simplexml_load_file($url);

    function stock ($data, $file) {

        $id = $data;
        $xml = $file->xpath("/document/data/rows/row[@SHORTNAME='$id']");

        function xml2array ( $xmlObject, $out = array () )
        {
            foreach ( (array) $xmlObject as $index => $node )
                $out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;
            return $out;
        }
        $array = xml2array ($xml);
foreach ($array as $ar)
        {
            foreach ($ar as $el) {
                echo '<i>'. $el['SHORTNAME']. ' ' . $el['ADMITTEDQUOTE']. ' руб. </i>';
            }
        }
    }

    stock ('ГМКНорНик', $file);







    ?>
@endsection

@endsection
