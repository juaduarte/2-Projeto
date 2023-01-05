var myLink = document.querySelector('a[href="#"]');
myLink.addEventListener('click', function(e) {
    e.preventDefault();
  });

function mascaraData( campo, e )
  {
      var kC = (document.all) ? event.keyCode : e.keyCode;
      var data = campo.value;
      
      if( kC!=8 && kC!=46 )
      {
          if( data.length==2 )
          {
              campo.value = data += '/';
          }
          else if( data.length==5 )
          {
              campo.value = data += '/';
          }
          else
              campo.value = data;
      }
  } 
