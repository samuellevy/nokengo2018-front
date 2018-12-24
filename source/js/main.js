var basics = {
    init: function() {
        basics.navBar();
        basics.clickNavigation();
        basics.scrollControl();
    },
    navBar: function(){
        $(".navbar").click(function(){
            $("#nav").toggleClass('active');
        });
    },
    clickNavigation: function() {
        $(".nav-item").click(function(){
            event.preventDefault();
            section = $(this).attr('data-href');
            position = $(section).offset().top;
            $('html,body').animate({scrollTop: position},'slow');
            $("#nav").toggleClass('active');
        });
        
        $(".to-screen").click(function(event){
            event.preventDefault();
            section = $(this).attr('data-href');
            position = $(section).offset().top;
            $('html,body').animate({scrollTop: position},'slow');
        });
        
    },
    scrollControl: function(){
        var lastScrollTop = 0;
        var old_screen = 'home';
        $(window).scroll(function (event) {
            var st = $(this).scrollTop();
            var scroll = $(window).scrollTop();
            var screen = 'home';
            var pages = [];
            pages['home'] = $('#header').offset().top;
            pages['estudio'] = $('#header').offset().top;
            pages['tecnologia'] = $('#tecnologia').offset().top;
            pages['capacidades'] = $('#capacidades').offset().top;
            pages['inovacao'] = $('#labs').offset().top;
            pages['contato'] = $('#contato').offset().top;
            
            if(scroll < pages['tecnologia']){
                screen = 'home';
                $('.navbar').removeClass('right');
            }
            else if(scroll > pages['tecnologia'] && scroll <  pages['capacidades']){
                screen = 'tecnologia';
                $('.navbar').addClass('right');
            }
            else if(scroll >  pages['capacidades'] && scroll <  pages['inovacao']){
                screen = 'capacidades';
                before = 'tecnologia';
                after = 'labs';
                if (st > lastScrollTop){
                    to = before;
                } else {
                    to = after;
                }
                $('.tag[data-screen='+to+']').removeClass('fixed');
                $('.tag[data-screen='+to+']').addClass('absolute');
            }
            else if(scroll >  pages['inovacao'] && scroll <  pages['contato'] - 200){
                screen = 'labs';
                before = 'capacidades';
                after = 'contato';
                if (st > lastScrollTop){
                    to = before;
                } else {
                    to = after;
                }
                // $('.tag[data-screen='+to+']').removeClass('fixed');
                // $('.tag[data-screen='+to+']').addClass('absolute');
            }
            else if(scroll >= pages['contato']){
                screen = 'contato';
                before = 'labs';
                if (st > lastScrollTop){
                    to = before;
                } else {
                    to = after;
                }
                // $('.tag[data-screen='+to+']').removeClass('fixed');
                $('.tag[data-screen='+to+']').addClass('absolute');
            }
            
            if(screen != old_screen){
                $('.tag[data-screen='+old_screen+']').removeClass('fixed');
                $('.tag[data-screen='+old_screen+']').addClass('absolute');
                
                $('.tag[data-screen='+screen+']').removeClass('absolute');
                $('.tag[data-screen='+screen+']').addClass('fixed');
                old_screen = screen;
                console.log('nao igual');
            }else{
                console.log('igual');
            }
            
            console.log(scroll + ' - ' + screen + ' - ' + old_screen);
            lastScrollTop = st;
        });
    }
}

var form = {
    webservice: 'http://web.nokengo.com/messages/',
    init: function(){
        form.click_listener();
        // $('form.contact').submit(function(event){
        //     event.preventDefault();
        //     alert('submited');
        // });
    },
    click_listener: function(){
        alert('2');
        $('form').submit(function(event){
            alert();
            event.preventDefault();
            body = JSON.stringify({
                "from" : $('.contact_name').val(),
                "email" : $('.contact_email').val(),
                "content" : $('.contact_message').val()
            });
            $('.modal-message').html('Enviando mensagem...');
            
            $('.modal').toggleClass('disactivated');
            $('.modal').show();
            
            form.send_form(body).then((rest)=>{
                setTimeout(function () {
                    $('.modal-message').html('Mensagem enviada!');
                }, 3000);
                clearTimeout();
                setTimeout(function () {
                    $('.modal').fadeOut();
                    $('.modal').toggleClass('disactivated');
                }, 5000);
            });
        });
    },
    send_form: function(body){
        var url = form.webservice;
        var object = {
            method: 'post',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            },
            body: body,
        };
        return fetch(url, object).then((res) => res.json());
    }
}

$(document).ready(function() {
    basics.init();
    form.init();
});