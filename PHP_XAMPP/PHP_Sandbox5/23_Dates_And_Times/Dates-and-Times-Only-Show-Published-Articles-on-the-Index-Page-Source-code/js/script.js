/**
 * Send links of class "delete" via post after a confirmation dialog
 */
$("a.delete").on("click", function(e) {

    e.preventDefault();

    if (confirm("Are you sure?")) {

        var frm = $("<form>");
        frm.attr('method', 'post');
        frm.attr('action', $(this).attr('href'));
        frm.appendTo("body");
        frm.submit();
    }
});

/**
 * Add a method to validate a date time string
 */
$.validator.addMethod("dateTime", function(value, element) {
        
    return (value == "") || ! isNaN(Date.parse(value));

}, "Must be a valid date and time");

/**
 * Validate the article form
 */
$("#formArticle").validate({
	rules: {
		title: {
			required: true
		},
		content: {
			required: true
		},
		published_at: {
			dateTime: true
		}
	}
});
