<html>
<head>
</head>
<body>
<script>

var color='#00CED1';
 $(document).ready(function() {
    $($("#taba",parent.document)).tabs();
    
    $($("#hotel",parent.document)).click(function() {
        $('#myTabs').tabs('select', '#tabone');
    });
    
    $('#showTab2').click(function() {
        $('#myTabs').tabs('select', '#tabtwo');
    });
});
</script>
</body>
</html>