
function decimalToBinary($number) {
    if ($number == 0) {
        return "0";
    }

    $binaryString = '';
    while ($number > 0) {
        $remainder = $number % 2;
        $binaryString = $remainder . $binaryString;
        $number = (int)($number / 2);
    }

    return $binaryString;
}


$decimalNumber = 30;
$binaryResult = decimalToBinary($decimalNumber);
echo "Binary of $decimalNumber is $binaryResult";

//OUTPUT : Binary of 30 is 11110
