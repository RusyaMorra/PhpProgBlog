$(document).ready(function(){
    function getUrl(method,params){
        if (!method) throw new Error('Вы не указали метод!');
        params = params || {};
        params['access_token'] = 'df227ee488de8256701044877165027b3792c4165092059e10d786f28083e8b6eddb7f48f83a56a9e1074';
        return 'https://api.vk.com/method/'+ method +'?'+ $.param(params)+ '&v=5.52';
    }
    
   

        $.ajax({
            url: getUrl('groups.getMembers',{group_id:169552305,sort:'time_asc',count:7,fields:'photo_100'}) ,
            method: 'GET',
            dataType: 'JSONP',
            success: function(data){
                drawFriends(data.response);
                console.log(data)
                
            }
        });
    
     function drawFriends(friends){
        
        var html = '';
        for(var i = 1; i < friends.items.length; i++){
          var f = friends.items[i];

          html+=
          '<li>'+  
          '<a target="_blank" href="https://vk.com/id'+ f.id+'">'
          +'<img class="imgvkstyle" src="'+f.photo_100+'"/>'
            +'<div>'
                +'<h4 class="textvkstyle">' + f.first_name +'<br>' + ' '+ f.last_name +'</h4>'
            +'</div>'
          
          +'</a>'
          +'</li>';
        }
         var peapleInGroup= ''
         peapleInGroup+='<div class="vk__num">'+ friends.count +' '+ 'members' +'</div>';

        $('.vk__list').html (html);
        $('.vk__textwrapperg').html (peapleInGroup);
      }

 

});
 
 
