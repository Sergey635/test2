const flourForKg = 0.47,
        potatoForKg = 0.36,
        margarineForKg = 0.20;

let flour = $('fieldset').find('.flour'),
    potato = $('fieldset').find('.potato'),
    cheese = $('fieldset').find('.cheese'),
    margarine = $('fieldset').find('.margarine'),
    onion = $('fieldset').find('.onion'),
    olis = $('fieldset').find('.olis'),
    light = $('fieldset').find('.light'),
    eggs = $('fieldset').find('.eggs');




$('h4').on('click', function() {
    

    if ($(this).parent().hasClass('active')) {
        $(this).parent().removeClass('active')
    }else {
        $('.name-product').removeClass('active')
        $(this).parent().addClass('active');
        $('.name-product').find('fieldset').hide();
    }

    if (!$('fieldset').parent().hasClass('active')) {
        $('fieldset').hide();
    }else {
        $('.name-product').find('fieldset').hide();
        $('.active').find('fieldset').show();
    }

    });
        
$('.total').on('click', function() {
    let self = $('.active');
    event.preventDefault();

    if ($('.vareniks-potato').parent().hasClass('active') == true) {
        let finalPotatoPrice = parseFloat(GetPotatoPrice()).toFixed(2);
        $('.finish-price').val(finalPotatoPrice);
        
        $('.result-potato').show().text('На 1 кг продукту затрачено ' + finalPotatoPrice + ' грн')

    }else if ($('.vareniks-cheese').parent().hasClass('active') == true) {
        let finalcheesePrice = parseFloat(GetcheesePrice()).toFixed(2);
        $('.finish-price').val(finalcheesePrice);
        $('.result-cheese').show().text('На 1 кг продукту затрачено ' + finalcheesePrice + ' грн')


    }else if ($('.dumplings').parent().hasClass('active') == true) {
        let finalDumplPrice = parseFloat(GetDumplingsPrice()).toFixed(2);
        $('.finish-price').val(finalDumplPrice);
        $('.result-dumpl').show().text('На 1 кг продукту затрачено ' + finalDumplPrice + ' грн')

    }

    
   
    });

    let GetPotatoPrice = function() {
        let flourPrice = $('.active').find(flour).val(),
        potatoPrice = $('.active').find(potato).val(),
        margarinePrice = $('.active').find(margarine).val(),
        onionPrice = $('.active').find(onion).val(),
        olisPrice = $('.active').find(olis).val(),
        lightPrice = $('.active').find(light).val();

    
        let flourCost = (flourPrice/50) * flourForKg,
            potatoCost = potatoPrice * potatoForKg,
            margarineCost = margarinePrice * margarineForKg,
            onionCost = onionPrice * 0.2,
            olisCost = olisPrice * 0.02,
            spiceCost = 1,
            gasCoast = 2,
            lightCoast = (lightPrice * 0.712) * 0.6;


        total = flourCost + potatoCost + margarineCost +onionCost + olisCost +spiceCost +gasCoast +lightCoast;

        return total;
    };
    let GetcheesePrice = function() {
        let flourPrice = $('.active').find(flour).val(),
        cheesePrice = $('.active').find(cheese).val(),
        margarinePrice = $('.active').find(margarine).val(),
        eggsPrice = $('.active').find(eggs).val(),
        lightPrice = $('.active').find(light).val(),
        spiceCost = 1;

        let flourCost = (flourPrice/50) * flourForKg,
            margarineCost = margarinePrice * margarineForKg,
            cheeseCoast = cheesePrice * 0.25, 
            eggsCoast = eggsPrice * 0.15,
            lightCoast = lightPrice * 0.15;

        total = flourCost + margarineCost + cheeseCoast +eggsCoast +lightCoast;

        return total;

    };
    let GetDumplingsPrice = function() {
        let flourPrice = $('.active').find(flour).val(),
        margarinePrice = $('.active').find(margarine).val(),
        lightPrice = $('.active').find(light).val();


        let flourCost = (flourPrice/50) * flourForKg,
            margarineCost = margarinePrice * margarineForKg,
            lightCoast = (lightPrice * 0.712) * 0.6;

        total = flourCost + margarineCost + lightCoast;

        return total;
    };

   