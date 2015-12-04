/**
 * Created by Administrator on 2015/12/3.
 */
$(function(){
    $('#status').click(function(){
        $.ajax({
            type: "POST",
            url: "./lib/operator.php",
            data: {data:"status"},
            success: function(data){
                $('#status_content').empty();
                $('#status_content').append(data);
            }
        });
    });
});
