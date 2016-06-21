<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    



     <script>

var FBClearGroup = function() {

    var memberSettings, removeLinks, timer;

    function exposeRemoveLinks() {
        console.log('en expose');
        console.debug('Getting all remove links...')
        // continue with the delete flow
        timer = setTimeout(openRemoveDialog, 1000);
    }

    function openRemoveDialog() {
        clearTimeout(timer);
        console.log('openremove');
        // Grab all the remove links

        // Remove the users
        timer = setTimeout(removeUsers, 1000);
    }

var count;
        var foo = function removeUsers() {
        if (count < 5) {
            timer = setTimeout(removeUsers, 1000);
             console.log (count);
             count++;
             console.log (count);

        } else 
            {
               // Click on the remove co   nfirm button
                console.debug('Starting removing users')
                var i = 1;
                    setTimeout(function() {
                        count++;
                        console.debug('Removed user');
                        console.log(count);



                    }, i * 1000);
                    i = i + 1;
                
                // setTimeout(function() { window.location.reload(false); }, (i + 7) * 1000);
            }
    }
// exposeRemoveLinks();
// removeUsers(); 

var handler = function(count) {
    var caller = arguments.callee;
    //Infinite
    if (count == -1) {
        window.setTimeout(function() {
            foo();
            caller(count);
        }, 1000);
    }
    if (count > 0) {
        if (count == 0) return;
        foo();
        window.setTimeout(function() {
            caller(count - 1);
        }, 100);    
    }
    if (count == null) {foo(); }
};


// handler(-1); //infito todos los usuarios
// handler(0); //ninguno
handler(2); //ponle el numero que quieras eliminar
// handler(); //correr una sola vez}();
    /**
     */ 
    
     </script>
</body>

</html>
