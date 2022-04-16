$(document).on('click', '.btn-add', function(e) {
    e.preventDefault();
    var controlForm = $(this).closest('.fvrduplicate'),
        currentEntry = $(this).parents('.entry:first'),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);
    newEntry.find('input').val('');
}).on('click', '.btn-remove', function(e) {
    $(this).closest('.entry').remove();
    return false;
});

$(document).on('click', '.btn-add1', function(e) {
    e.preventDefault();
    var controlForm = $(this).closest('.fvrduplicate1'),
        currentEntry = $(this).parents('.entry1:first'),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);
    newEntry.find('input').val('');
}).on('click', '.btn-remove1', function(e) {
    $(this).closest('.entry1').remove();
    return false;
});

$(document).on('click', '.btn-add2', function(e) {
    e.preventDefault();
    var controlForm = $(this).closest('.fvrduplicate2'),
        currentEntry = $(this).parents('.entry2:first'),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);
    newEntry.find('input').val('');
}).on('click', '.btn-remove2', function(e) {
    $(this).closest('.entry2').remove();
    return false;
});
