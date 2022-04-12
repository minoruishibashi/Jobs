{"filter":false,"title":"reviewsedit.blade.php","tooltip":"/cms/resources/views/reviewsedit.blade.php","undoManager":{"mark":99,"position":99,"stack":[[{"start":{"row":0,"column":0},"end":{"row":59,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"row\">","        {{ Auth::user()->id  }}","    USERID:{{$userid}}","    ","    <div class=\"col-md-12\">","    @include('common.errors')","    <form action=\"{{ url('posts/update') }}\" method=\"POST\">","","        <!-- title -->","        <div class=\"form-group\">","           <label for=\"item_name\">投稿タイトル</label>","           <input type=\"text\" id=\"item_name\" name=\"title\" class=\"form-control\" value=\"{{$post->title}}\">","        </div>","        <!--/ title -->","        ","        <!-- contents -->","        <div class=\"form-group\">","           <label for=\"item_number\">内容</label>","        <input type=\"text\" id=\"item_number\" name=\"contents\" class=\"form-control\" value=\"{{$post->contents}}\">","        </div>","        <!--/ contents -->","","        <!-- skill_ -->","        <div class=\"form-group\">","           <label for=\"item_amount\">スキル</label>","        <input type=\"text\" id=\"item_amount\" name=\"skill\" class=\"form-control\" value=\"{{$post->skill}}\">","        </div>","        <!--/ skill -->","        ","        <!-- nameor -->","        <div class=\"form-group\">","           <label for=\"published\">匿名にしますか？</label>","            <input type=\"test\" id=\"published\" name=\"nameor\" class=\"form-control\" value=\"{{$post->nameor}}\"/>","        </div>","        <!--/ published -->","        ","        <!-- Saveボタン/Backボタン -->","        <div class=\"well well-sm\">","            <button type=\"submit\" class=\"btn btn-primary\">Save</button>","            <a class=\"btn btn-link pull-right\" href=\"{{ url('/') }}\">","                Back","            </a>","        </div>","        <!--/ Saveボタン/Backボタン -->","         ","          id値を送信 ","         <input type=\"hidden\" name=\"id\" value=\"{{$post->id}}\">","         / id値を送信 ","         ","         <!-- CSRF -->","         {{ csrf_field() }}","         <!--/ CSRF -->","         ","    </form>","    </div>","</div>","@endsection"],"id":1}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":4},"action":"remove","lines":["    USERID:{{$userid}}","    "],"id":2}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["t"],"id":3},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["s"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["o"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["p"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["r"],"id":4},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["e"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["v"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["i"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["e"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["w"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":34},"action":"remove","lines":["reviewss"],"id":5},{"start":{"row":8,"column":26},"end":{"row":8,"column":33},"action":"insert","lines":["reviews"]}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["投"],"id":10},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["稿"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["タ"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["イ"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["ト"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["ル"]}],[{"start":{"row":14,"column":34},"end":{"row":14,"column":39},"action":"insert","lines":["コメントp"],"id":11}],[{"start":{"row":14,"column":38},"end":{"row":14,"column":39},"action":"remove","lines":["p"],"id":12}],[{"start":{"row":21,"column":37},"end":{"row":21,"column":38},"action":"remove","lines":["容"],"id":13},{"start":{"row":21,"column":36},"end":{"row":21,"column":37},"action":"remove","lines":["内"]}],[{"start":{"row":21,"column":36},"end":{"row":21,"column":39},"action":"insert","lines":["匿名に"],"id":14},{"start":{"row":21,"column":39},"end":{"row":21,"column":42},"action":"insert","lines":["するか"]}],[{"start":{"row":21,"column":41},"end":{"row":21,"column":42},"action":"remove","lines":["か"],"id":15},{"start":{"row":21,"column":40},"end":{"row":21,"column":41},"action":"remove","lines":["る"]},{"start":{"row":21,"column":39},"end":{"row":21,"column":40},"action":"remove","lines":["す"]}],[{"start":{"row":21,"column":39},"end":{"row":21,"column":44},"action":"insert","lines":["しますか？"],"id":16}],[{"start":{"row":15,"column":92},"end":{"row":15,"column":93},"action":"remove","lines":["t"],"id":17},{"start":{"row":15,"column":91},"end":{"row":15,"column":92},"action":"remove","lines":["s"]},{"start":{"row":15,"column":90},"end":{"row":15,"column":91},"action":"remove","lines":["o"]},{"start":{"row":15,"column":89},"end":{"row":15,"column":90},"action":"remove","lines":["p"]}],[{"start":{"row":15,"column":89},"end":{"row":15,"column":90},"action":"insert","lines":["r"],"id":18},{"start":{"row":15,"column":90},"end":{"row":15,"column":91},"action":"insert","lines":["e"]},{"start":{"row":15,"column":91},"end":{"row":15,"column":92},"action":"insert","lines":["v"]},{"start":{"row":15,"column":92},"end":{"row":15,"column":93},"action":"insert","lines":["i"]},{"start":{"row":15,"column":93},"end":{"row":15,"column":94},"action":"insert","lines":["e"]},{"start":{"row":15,"column":94},"end":{"row":15,"column":95},"action":"insert","lines":["w"]}],[{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"remove","lines":["t"],"id":19},{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"remove","lines":["i"]},{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"remove","lines":["t"]},{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"remove","lines":["l"]},{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"remove","lines":["e"]}],[{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"insert","lines":["v"],"id":20},{"start":{"row":15,"column":98},"end":{"row":15,"column":99},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":98},"end":{"row":15,"column":99},"action":"remove","lines":["o"],"id":21},{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"remove","lines":["v"]}],[{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"insert","lines":["c"],"id":22},{"start":{"row":15,"column":98},"end":{"row":15,"column":99},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":99},"end":{"row":15,"column":100},"action":"insert","lines":["m"],"id":23},{"start":{"row":15,"column":100},"end":{"row":15,"column":101},"action":"insert","lines":["m"]},{"start":{"row":15,"column":101},"end":{"row":15,"column":102},"action":"insert","lines":["e"]},{"start":{"row":15,"column":102},"end":{"row":15,"column":103},"action":"insert","lines":["n"]},{"start":{"row":15,"column":103},"end":{"row":15,"column":104},"action":"insert","lines":["t"]}],[{"start":{"row":15,"column":103},"end":{"row":15,"column":104},"action":"remove","lines":["t"],"id":24},{"start":{"row":15,"column":102},"end":{"row":15,"column":103},"action":"remove","lines":["n"]},{"start":{"row":15,"column":101},"end":{"row":15,"column":102},"action":"remove","lines":["e"]},{"start":{"row":15,"column":100},"end":{"row":15,"column":101},"action":"remove","lines":["m"]},{"start":{"row":15,"column":99},"end":{"row":15,"column":100},"action":"remove","lines":["m"]},{"start":{"row":15,"column":98},"end":{"row":15,"column":99},"action":"remove","lines":["o"]},{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"remove","lines":["c"]}],[{"start":{"row":15,"column":97},"end":{"row":15,"column":98},"action":"insert","lines":["r"],"id":25},{"start":{"row":15,"column":98},"end":{"row":15,"column":99},"action":"insert","lines":["e"]},{"start":{"row":15,"column":99},"end":{"row":15,"column":100},"action":"insert","lines":["v"]},{"start":{"row":15,"column":100},"end":{"row":15,"column":101},"action":"insert","lines":["i"]}],[{"start":{"row":15,"column":97},"end":{"row":15,"column":101},"action":"remove","lines":["revi"],"id":26},{"start":{"row":15,"column":97},"end":{"row":15,"column":108},"action":"insert","lines":["review_text"]}],[{"start":{"row":22,"column":94},"end":{"row":22,"column":95},"action":"remove","lines":["t"],"id":27},{"start":{"row":22,"column":93},"end":{"row":22,"column":94},"action":"remove","lines":["s"]},{"start":{"row":22,"column":92},"end":{"row":22,"column":93},"action":"remove","lines":["o"]},{"start":{"row":22,"column":91},"end":{"row":22,"column":92},"action":"remove","lines":["p"]}],[{"start":{"row":22,"column":91},"end":{"row":22,"column":92},"action":"insert","lines":["r"],"id":28},{"start":{"row":22,"column":92},"end":{"row":22,"column":93},"action":"insert","lines":["e"]},{"start":{"row":22,"column":93},"end":{"row":22,"column":94},"action":"insert","lines":["v"]},{"start":{"row":22,"column":94},"end":{"row":22,"column":95},"action":"insert","lines":["i"]}],[{"start":{"row":22,"column":95},"end":{"row":22,"column":96},"action":"insert","lines":["e"],"id":29},{"start":{"row":22,"column":96},"end":{"row":22,"column":97},"action":"insert","lines":["w"]}],[{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["c"],"id":30},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["o"]},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["n"]},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["t"]},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["e"]},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["n"]},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["t"]},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["s"]}],[{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"insert","lines":["n"],"id":31},{"start":{"row":22,"column":100},"end":{"row":22,"column":101},"action":"insert","lines":["b"]},{"start":{"row":22,"column":101},"end":{"row":22,"column":102},"action":"insert","lines":["a"]}],[{"start":{"row":22,"column":101},"end":{"row":22,"column":102},"action":"remove","lines":["a"],"id":32},{"start":{"row":22,"column":100},"end":{"row":22,"column":101},"action":"remove","lines":["b"]},{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"remove","lines":["n"]}],[{"start":{"row":22,"column":99},"end":{"row":22,"column":100},"action":"insert","lines":["n"],"id":33},{"start":{"row":22,"column":100},"end":{"row":22,"column":101},"action":"insert","lines":["a"]},{"start":{"row":22,"column":101},"end":{"row":22,"column":102},"action":"insert","lines":["m"]},{"start":{"row":22,"column":102},"end":{"row":22,"column":103},"action":"insert","lines":["e"]},{"start":{"row":22,"column":103},"end":{"row":22,"column":104},"action":"insert","lines":["o"]},{"start":{"row":22,"column":104},"end":{"row":22,"column":105},"action":"insert","lines":["r"]}],[{"start":{"row":25,"column":0},"end":{"row":39,"column":8},"action":"remove","lines":["","        <!-- skill_ -->","        <div class=\"form-group\">","           <label for=\"item_amount\">スキル</label>","        <input type=\"text\" id=\"item_amount\" name=\"skill\" class=\"form-control\" value=\"{{$post->skill}}\">","        </div>","        <!--/ skill -->","        ","        <!-- nameor -->","        <div class=\"form-group\">","           <label for=\"published\">匿名にしますか？</label>","            <input type=\"test\" id=\"published\" name=\"nameor\" class=\"form-control\" value=\"{{$post->nameor}}\"/>","        </div>","        <!--/ published -->","        "],"id":34}],[{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"insert","lines":["p"],"id":35}],[{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"remove","lines":["p"],"id":36}],[{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"insert","lines":["p"],"id":37},{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"insert","lines":["o"]},{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"insert","lines":["s"]},{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"insert","lines":["t"]}],[{"start":{"row":29,"column":62},"end":{"row":29,"column":66},"action":"remove","lines":["post"],"id":38},{"start":{"row":29,"column":62},"end":{"row":29,"column":73},"action":"insert","lines":["postsdetail"]}],[{"start":{"row":36,"column":53},"end":{"row":36,"column":54},"action":"remove","lines":["t"],"id":39},{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"remove","lines":["s"]},{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"remove","lines":["o"]},{"start":{"row":36,"column":50},"end":{"row":36,"column":51},"action":"remove","lines":["p"]}],[{"start":{"row":36,"column":50},"end":{"row":36,"column":51},"action":"insert","lines":["r"],"id":40},{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"insert","lines":["e"]},{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"insert","lines":["v"]},{"start":{"row":36,"column":53},"end":{"row":36,"column":54},"action":"insert","lines":["i"]},{"start":{"row":36,"column":54},"end":{"row":36,"column":55},"action":"insert","lines":["e"]},{"start":{"row":36,"column":55},"end":{"row":36,"column":56},"action":"insert","lines":["w"]}],[{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"insert","lines":["/"],"id":41},{"start":{"row":35,"column":10},"end":{"row":35,"column":11},"action":"insert","lines":["/"]}],[{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"insert","lines":["/"],"id":42}],[{"start":{"row":35,"column":0},"end":{"row":36,"column":0},"action":"remove","lines":["         // id値を送信 ",""],"id":44}],[{"start":{"row":36,"column":0},"end":{"row":37,"column":9},"action":"remove","lines":["         // id値を送信 ","         "],"id":45}],[{"start":{"row":15,"column":95},"end":{"row":15,"column":96},"action":"insert","lines":["s"],"id":46}],[{"start":{"row":22,"column":97},"end":{"row":22,"column":98},"action":"insert","lines":["s"],"id":47}],[{"start":{"row":35,"column":56},"end":{"row":35,"column":57},"action":"insert","lines":["s"],"id":48}],[{"start":{"row":15,"column":95},"end":{"row":15,"column":96},"action":"remove","lines":["s"],"id":49}],[{"start":{"row":22,"column":97},"end":{"row":22,"column":98},"action":"remove","lines":["s"],"id":50}],[{"start":{"row":35,"column":56},"end":{"row":35,"column":57},"action":"remove","lines":["s"],"id":51}],[{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"remove","lines":["t"],"id":52},{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"remove","lines":["s"]},{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"remove","lines":["o"]},{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"remove","lines":["p"]}],[{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"insert","lines":["r"],"id":53},{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"insert","lines":["e"]},{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"insert","lines":["v"]},{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"insert","lines":["i"]},{"start":{"row":29,"column":66},"end":{"row":29,"column":67},"action":"insert","lines":["e"]}],[{"start":{"row":29,"column":62},"end":{"row":29,"column":67},"action":"remove","lines":["revie"],"id":54},{"start":{"row":29,"column":62},"end":{"row":29,"column":69},"action":"insert","lines":["reviews"]}],[{"start":{"row":29,"column":69},"end":{"row":29,"column":70},"action":"remove","lines":["s"],"id":55}],[{"start":{"row":29,"column":67},"end":{"row":29,"column":68},"action":"remove","lines":["w"],"id":56},{"start":{"row":29,"column":66},"end":{"row":29,"column":67},"action":"remove","lines":["e"]},{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"remove","lines":["i"]},{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"remove","lines":["v"]},{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"remove","lines":["e"]},{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"remove","lines":["r"]}],[{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"insert","lines":["p"],"id":57},{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"insert","lines":["o"]},{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"insert","lines":["s"]},{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"insert","lines":["t"]},{"start":{"row":29,"column":66},"end":{"row":29,"column":67},"action":"insert","lines":["s"]}],[{"start":{"row":29,"column":62},"end":{"row":29,"column":67},"action":"remove","lines":["posts"],"id":58},{"start":{"row":29,"column":62},"end":{"row":29,"column":67},"action":"insert","lines":["posts"]}],[{"start":{"row":29,"column":67},"end":{"row":29,"column":68},"action":"remove","lines":["s"],"id":59}],[{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"insert","lines":["."],"id":60}],[{"start":{"row":29,"column":75},"end":{"row":29,"column":86},"action":"insert","lines":[".$post->id)"],"id":61}],[{"start":{"row":29,"column":75},"end":{"row":29,"column":76},"action":"remove","lines":["."],"id":63}],[{"start":{"row":29,"column":73},"end":{"row":29,"column":74},"action":"insert","lines":["/"],"id":64}],[{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"remove","lines":["/"],"id":65}],[{"start":{"row":29,"column":80},"end":{"row":29,"column":81},"action":"insert","lines":["s"],"id":66}],[{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["."],"id":67},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["$"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["p"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["o"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["s"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["t"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["s"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["-"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":[">"]},{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["i"]}],[{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"remove","lines":["d"],"id":68}],[{"start":{"row":29,"column":72},"end":{"row":29,"column":73},"action":"remove","lines":["/"],"id":69},{"start":{"row":29,"column":71},"end":{"row":29,"column":72},"action":"remove","lines":["l"]},{"start":{"row":29,"column":70},"end":{"row":29,"column":71},"action":"remove","lines":["i"]},{"start":{"row":29,"column":69},"end":{"row":29,"column":70},"action":"remove","lines":["a"]},{"start":{"row":29,"column":68},"end":{"row":29,"column":69},"action":"remove","lines":["t"]},{"start":{"row":29,"column":67},"end":{"row":29,"column":68},"action":"remove","lines":["e"]},{"start":{"row":29,"column":66},"end":{"row":29,"column":67},"action":"remove","lines":["d"]},{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"remove","lines":["s"]},{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"remove","lines":["t"]},{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"remove","lines":["s"]},{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"remove","lines":["o"]},{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"remove","lines":["p"]}],[{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"insert","lines":["/"],"id":70}],[{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"remove","lines":[")"],"id":72}],[{"start":{"row":11,"column":0},"end":{"row":16,"column":23},"action":"insert","lines":["        <!-- title -->","        <div class=\"form-group\">","           <label for=\"item_name\">投稿者</label>","           <input type=\"text\" id=\"item_name\" name=\"title\" class=\"form-control\" value=\"{{$post->user->name}}\">","        </div>","        <!--/ title -->"],"id":73}],[{"start":{"row":14,"column":89},"end":{"row":14,"column":90},"action":"remove","lines":["p"],"id":74},{"start":{"row":14,"column":89},"end":{"row":14,"column":90},"action":"remove","lines":["o"]},{"start":{"row":14,"column":89},"end":{"row":14,"column":90},"action":"remove","lines":["s"]},{"start":{"row":14,"column":89},"end":{"row":14,"column":90},"action":"remove","lines":["t"]}],[{"start":{"row":14,"column":89},"end":{"row":14,"column":90},"action":"insert","lines":["r"],"id":75},{"start":{"row":14,"column":90},"end":{"row":14,"column":91},"action":"insert","lines":["e"]},{"start":{"row":14,"column":91},"end":{"row":14,"column":92},"action":"insert","lines":["v"]},{"start":{"row":14,"column":92},"end":{"row":14,"column":93},"action":"insert","lines":["i"]},{"start":{"row":14,"column":93},"end":{"row":14,"column":94},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":94},"end":{"row":14,"column":95},"action":"insert","lines":["w"],"id":76}],[{"start":{"row":20,"column":55},"end":{"row":20,"column":56},"action":"remove","lines":["e"],"id":94},{"start":{"row":20,"column":54},"end":{"row":20,"column":55},"action":"remove","lines":["l"]},{"start":{"row":20,"column":53},"end":{"row":20,"column":54},"action":"remove","lines":["t"]},{"start":{"row":20,"column":52},"end":{"row":20,"column":53},"action":"remove","lines":["i"]},{"start":{"row":20,"column":51},"end":{"row":20,"column":52},"action":"remove","lines":["t"]}],[{"start":{"row":20,"column":51},"end":{"row":20,"column":62},"action":"insert","lines":["review_text"],"id":95}],[{"start":{"row":27,"column":57},"end":{"row":27,"column":58},"action":"remove","lines":["s"],"id":96},{"start":{"row":27,"column":56},"end":{"row":27,"column":57},"action":"remove","lines":["t"]},{"start":{"row":27,"column":55},"end":{"row":27,"column":56},"action":"remove","lines":["n"]},{"start":{"row":27,"column":54},"end":{"row":27,"column":55},"action":"remove","lines":["e"]},{"start":{"row":27,"column":53},"end":{"row":27,"column":54},"action":"remove","lines":["t"]},{"start":{"row":27,"column":52},"end":{"row":27,"column":53},"action":"remove","lines":["n"]},{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"remove","lines":["o"]},{"start":{"row":27,"column":50},"end":{"row":27,"column":51},"action":"remove","lines":["c"]}],[{"start":{"row":27,"column":50},"end":{"row":27,"column":56},"action":"insert","lines":["nameor"],"id":97}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["i"],"id":98},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["t"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["e"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["m"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["_"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["n"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["a"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["m"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["e"]}],[{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["i"],"id":99},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["t"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["e"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["m"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["_"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["n"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["u"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["m"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["b"]},{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["e"]}],[{"start":{"row":27,"column":31},"end":{"row":27,"column":32},"action":"remove","lines":["r"],"id":100}],[{"start":{"row":41,"column":0},"end":{"row":42,"column":0},"action":"insert","lines":["         <input type=\"hidden\" name=\"id\" value=\"{{$review->id}}\">",""],"id":102}],[{"start":{"row":41,"column":55},"end":{"row":41,"column":56},"action":"remove","lines":["w"],"id":103},{"start":{"row":41,"column":54},"end":{"row":41,"column":55},"action":"remove","lines":["e"]},{"start":{"row":41,"column":53},"end":{"row":41,"column":54},"action":"remove","lines":["i"]},{"start":{"row":41,"column":52},"end":{"row":41,"column":53},"action":"remove","lines":["v"]},{"start":{"row":41,"column":51},"end":{"row":41,"column":52},"action":"remove","lines":["e"]},{"start":{"row":41,"column":50},"end":{"row":41,"column":51},"action":"remove","lines":["r"]}],[{"start":{"row":41,"column":50},"end":{"row":41,"column":51},"action":"insert","lines":["p"],"id":104},{"start":{"row":41,"column":51},"end":{"row":41,"column":52},"action":"insert","lines":["o"]},{"start":{"row":41,"column":52},"end":{"row":41,"column":53},"action":"insert","lines":["s"]},{"start":{"row":41,"column":53},"end":{"row":41,"column":54},"action":"insert","lines":["t"]}],[{"start":{"row":41,"column":37},"end":{"row":41,"column":38},"action":"remove","lines":["d"],"id":105},{"start":{"row":41,"column":36},"end":{"row":41,"column":37},"action":"remove","lines":["i"]}],[{"start":{"row":41,"column":36},"end":{"row":41,"column":46},"action":"insert","lines":["$post->id}"],"id":106}],[{"start":{"row":41,"column":42},"end":{"row":41,"column":43},"action":"remove","lines":[">"],"id":107},{"start":{"row":41,"column":41},"end":{"row":41,"column":42},"action":"remove","lines":["-"]}],[{"start":{"row":41,"column":41},"end":{"row":41,"column":42},"action":"insert","lines":["_"],"id":108}],[{"start":{"row":41,"column":60},"end":{"row":41,"column":61},"action":"remove","lines":["t"],"id":109},{"start":{"row":41,"column":59},"end":{"row":41,"column":60},"action":"remove","lines":["s"]},{"start":{"row":41,"column":58},"end":{"row":41,"column":59},"action":"remove","lines":["o"]},{"start":{"row":41,"column":57},"end":{"row":41,"column":58},"action":"remove","lines":["p"]}],[{"start":{"row":41,"column":57},"end":{"row":41,"column":58},"action":"insert","lines":["r"],"id":110},{"start":{"row":41,"column":58},"end":{"row":41,"column":59},"action":"insert","lines":["e"]},{"start":{"row":41,"column":59},"end":{"row":41,"column":60},"action":"insert","lines":["v"]},{"start":{"row":41,"column":60},"end":{"row":41,"column":61},"action":"insert","lines":["i"]},{"start":{"row":41,"column":61},"end":{"row":41,"column":62},"action":"insert","lines":["e"]},{"start":{"row":41,"column":62},"end":{"row":41,"column":63},"action":"insert","lines":["w"]}],[{"start":{"row":41,"column":65},"end":{"row":41,"column":66},"action":"insert","lines":["p"],"id":111},{"start":{"row":41,"column":66},"end":{"row":41,"column":67},"action":"insert","lines":["o"]},{"start":{"row":41,"column":67},"end":{"row":41,"column":68},"action":"insert","lines":["s"]},{"start":{"row":41,"column":68},"end":{"row":41,"column":69},"action":"insert","lines":["t"]}],[{"start":{"row":41,"column":65},"end":{"row":41,"column":71},"action":"remove","lines":["postid"],"id":112},{"start":{"row":41,"column":65},"end":{"row":41,"column":72},"action":"insert","lines":["post_id"]}],[{"start":{"row":41,"column":44},"end":{"row":41,"column":45},"action":"remove","lines":["}"],"id":113}],[{"start":{"row":41,"column":36},"end":{"row":41,"column":37},"action":"remove","lines":["$"],"id":114}],[{"start":{"row":39,"column":9},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":115},{"start":{"row":40,"column":0},"end":{"row":40,"column":9},"action":"insert","lines":["         "]}],[{"start":{"row":40,"column":9},"end":{"row":40,"column":25},"action":"insert","lines":["$review->post_id"],"id":116}],[{"start":{"row":40,"column":25},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":117},{"start":{"row":41,"column":0},"end":{"row":41,"column":9},"action":"insert","lines":["         "]}],[{"start":{"row":40,"column":25},"end":{"row":40,"column":26},"action":"insert","lines":[";"],"id":118}],[{"start":{"row":40,"column":9},"end":{"row":40,"column":10},"action":"insert","lines":["{"],"id":119},{"start":{"row":40,"column":10},"end":{"row":40,"column":11},"action":"insert","lines":["{"]}],[{"start":{"row":40,"column":27},"end":{"row":40,"column":28},"action":"insert","lines":["}"],"id":120},{"start":{"row":40,"column":28},"end":{"row":40,"column":29},"action":"insert","lines":["}"]}],[{"start":{"row":40,"column":24},"end":{"row":40,"column":25},"action":"insert","lines":["s"],"id":122}],[{"start":{"row":40,"column":20},"end":{"row":40,"column":25},"action":"remove","lines":["posts"],"id":123},{"start":{"row":40,"column":20},"end":{"row":40,"column":25},"action":"insert","lines":["posts"]}],[{"start":{"row":43,"column":67},"end":{"row":43,"column":68},"action":"insert","lines":["s"],"id":124}],[{"start":{"row":43,"column":40},"end":{"row":43,"column":41},"action":"insert","lines":["s"],"id":125}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":5},"end":{"row":4,"column":31},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1629978203804,"hash":"124127900e93726e3ef649cda0abbcc05d8019b1"}