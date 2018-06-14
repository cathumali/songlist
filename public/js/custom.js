function ajax(url,id){
            $.ajax({
                type: "get",
                url: url+id,
                success: function(data, xhrStatus){
                    alert('Successfully Deleted');
                    location.reload();
                },error: function(data, status, errMsg){
                     alert('Error Deleting');
                }

            });
}

function updateStatus(params){
    if(params.name == 'song'){
        var conf = confirm('Are you sure you want to delete this song?');
        if(conf){
            ajax("/destroy/",params.id);
        }        
    }
    else{
        var conf = confirm('Are you sure you want to delete this title?');
        if(conf){

            ajax("/delete/",params.id);
        }
    }
}



function openMediaTool(url,width, height){
    $.colorbox(
        {
            href: url,
            fastIframe:false,
            iframe:false,
            width:width,
            height:height,
            maxwidth:width,
            maxheight:height,
            fixed:true,   
            scrolling: true,
            open: true,

        }
    );
}











