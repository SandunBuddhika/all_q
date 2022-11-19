<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <table class="tbl" >

        <tr>
            <th colspan="4">
                <div class="hd">Claculator</div>
            </th>
        </tr>

        <tr>
            <td colspan="4">
                <input type="text" class="txt" id="txt"/>
            </td>
        </tr>

        <tr>
            <td class="tb1_tr"><button  onclick="m(1);">1</button></td>
            <td class="tb1_tr"><button  onclick="m(2);">2</button></td>
            <td class="tb1_tr"><button onclick="m(3);">3</button></td>
            <td rowspan="3" >
                <button class="CE" onclick="c();">CE</button>
                <br /><br />
                <button class="CE" onclick="m('+');">+</button>
                <br /><br />
                <button class="CE"  onclick="m('-');">-</button>
            </td>
        </tr>
        <tr>
            <td class="tb1_tr"><button  onclick="m(4);">4</button></td>
            <td class="tb1_tr"><button  onclick="m(5);">5</button></td>
            <td class="tb1_tr"><button  onclick="m(6);">6</button></td>
        </tr>
        <tr>
            <td class="tb1_tr"><button  onclick="m(7);">7</button></td>
            <td class="tb1_tr"><button  onclick="m(8);">8</button></td>
            <td class="tb1_tr"><button  onclick="m(9);">9</button></td>
        </tr>
        <tr>
            <td class="tb1_tr"><button onclick="m('.');">.</button></td>
            <td class="tb1_tr"><button onclick="m(0);">0</button></td>
            <td class="tb1_tr" colspan="2"><button  style="width: 100px;" onclick="awnser();" >=</button></td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>

</html>
