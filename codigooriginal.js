var FBClearGroup = function() {
    // setear cantidad de veces
    var veces = 2;
    // Get all the Admins settings buttons
    var memberSettings, removeLinks, timer;

    /**
     * This function will click on all the uses admin settings buttons to add the remove link to the page dom
     */
    function exposeRemoveLinks() {
        memberSettings = Array.prototype.slice.call(document.querySelectorAll('.adminActions [role="button"]'));

        // Expose all the remove users links except the first one, which is the admin
        console.debug('Getting all remove links...')

        var i = 0;
        memberSettings.forEach(function(item) {
            i = i + 1;
            if (i == 1) {
                return;
            }
            item.click();
        });

        // continue with the delete flow
        timer = setTimeout(openRemoveDialog, 1000);
    }

    /**
     * This function will display the remove dialog
     */
    function openRemoveDialog() {
        clearTimeout(timer);

        // Grab all the remove links
        removeLinks = Array.prototype.slice.call(document.querySelectorAll("a[href*='remove.php']"));
        removeLinks.forEach(function(item) {
            item.click();
        });

        // Remove the users
        timer = setTimeout(removeUsers, 1000);
    }

    /**
     * This method will click on the remove user and will remove the user form group
     */
    function removeUsers() {
        // Grab all the confirm buttons
        var confirmButton = Array.prototype.slice.call(document.querySelectorAll('.layerConfirm.uiOverlayButton[type="submit"]'));
        // Verify that the previous step has completed
        if (confirmButton.length + 1 < memberSettings.length) {
            timer = setTimeout(removeUsers, 1000);
        } else {
            // console.log(confirmButton.length);
            // console.log(memberSettings.length);

            // Click on the remove confirm button
            console.debug('Starting removing users')
            var i = 1;
            // console.log(confirmButton);
                var contador=0;
            confirmButton.forEach(function(item) 
            {   setTimeout(function() { contador = contador + 1; 
                console.log(contador); 
                if (contador <= veces) { item.click(); console.debug('Removed user'); }
                else { var CancelButton =Array.prototype.slice.call(document.querySelectorAll('.layerCancel.uiOverlayButton'));  
                        CancelButton.forEach(function(item) {
                    setTimeout(function() 
                        { item.click(); console.debug('Cancel user');    
                        }, i * 1000);
                     });
                }
                }, i * 1000);
                i = i + 1;
            
            });
            
            // Reload the page after everything is finished + 7 seconds
            setTimeout(function() {
                window.location.reload(false); 
            }, (i + 7) * 1000);



        }
    }

    exposeRemoveLinks();
}();