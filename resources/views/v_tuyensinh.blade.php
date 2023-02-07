<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--    Dung: npm run dev ==> De them file scss va js, trang web se tu refresh khi thay doi noi dung, khong can f5--}}
{{--    Khi hoan thanh thi: npm run build ==> Luc nay khong can  run devn ua--}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="container">
    <form method="post" action="tuyensinhpost" class="container">
        @csrf
        <div class="form-group m-3">
            <h1>Xep loai ket qua tuyen sinh</h1>
        </div>
        <div class="form-group m-3">
            <label for="toan">Diem mon Toan</label>
            <input type="text" id="toan" name="toan" required>
        </div>
        <div class="form-group m-3">
            <label for="ly">Diem mon Ly</label>
            <input type="text" id="ly" name="ly" required>
        </div>
        <div class="form-group m-3">
            <label for="hoa">Diem mon Hoa</label>
            <input type="text" id="hoa" name="hoa" required>
        </div>
        <div class="form-group m-3">
            <label for="kv">Chon khu vuc</label>
            <select id="kv" name="kv">
                <option value="1">Khu vuc 1</option>
                <option value="2">Khu vuc 2</option>
                <option value="3">Khu vuc 3</option>
                <option value="4">Khu vuc 4</option>
            </select>
        </div>
        <div class="form-group m-3">
            <input type="submit" value="Xep loai" class="btn btn-success">
        </div>
    </form>

    @if(isset($toan) && isset($ly) && isset($hoa))
        <div>Tong diem: {{ $toan + $ly + $hoa + $ut}}</div>
        <div>Diem uu tien:
            @if($kv==1 || $kv==2)
                5
                <?php
                    $ut = 5;
                    ?>
            @elseif($kv==3)
                3
                    <?php
                    $ut = 3;
                    ?>
            @else
                0
                    <?php
                    $ut = 0;
                    ?>
            @endif
        </div>
    @endif
</body>
</html>
