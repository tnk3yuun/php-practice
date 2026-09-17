// Q1 変数と文字列

$name = '田中';

 echo "私の名前は「 $name 」です";

// Q2 四則演算

$num = 4 * 5;
echo($num);
 
$x = 2;
echo($num / $x)

// Q3 日付操作

echo date('現在時刻は、Y年m月d日 H時i分s秒です。');


// Q4 条件分岐-1 if文

$device = 'windows';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
    }

// Q5 条件分岐-2 三項演算子

$age = 23;
$message = ($age > 18) ? '大人！' : '子供！';

echo $message;

// Q6 配列

$kanto = ['東京','埼玉','栃木県','千葉県','茨城県','群馬県','神奈川県'];

echo $kanto[2] . 'と' . $kanto[3]. 'は関東地方の都道府県です。';


// Q7 連想配列-1

$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];
foreach ($kanto as $prefecture => $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2

$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];

if (isset($kanto['埼玉県']));
echo '埼玉県の県庁所在地は、さいたま市です';

// Q9 連想配列-3

$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
  '愛知県' => '名古屋市',
  '大阪府' => '大阪市'
];

foreach ($kanto as $prefecture => $capital) {
    if (
      $prefecture === '東京都' ||
        $prefecture === '神奈川県' ||
        $prefecture === '千葉県' ||
        $prefecture === '埼玉県' ||
        $prefecture === '栃木県' ||
        $prefecture === '群馬県' ||
        $prefecture === '茨城県'
    ) {
        echo "{$prefecture}の県庁所在地は、{$capital}です。\n";
    } else {
        echo "{$prefecture}は関東地方ではありません。\n";
    }
}


// Q10 関数-1

 function hello($name) {
    return "{$name}さん、こんにちは。";
}
echo hello ("金谷"). "\n";
echo hello ("安藤");


// Q11 関数-2

$price = 1000;

function calcTaxInPrice($price) {
    return $price * 1.1;
}

$taxInPrice = calcTaxInPrice($price);

echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";

// Q12 関数とif文

function distinguishNum($num) {
    if ($num % 2 == 1){
       return "{$num}は奇数です。";
   } else {
       return "{$num}は偶数です。";
   }
}

echo distinguishNum(11);
echo "\n";
echo distinguishNum(24);

 
// Q13 関数とswitch文

function evaluateGrade($grade){
  switch ($grade){
    case 'A':
    case 'B':
      return '合格です。';

    case 'C':
       return '合格ですが追加課題があります';
   
    case 'D':
      return '判定不明です。講師に問い合わせてください。';

  }
}

echo evaluateGrade('A');
echo "\n";
echo evaluateGrade('D');

?>

