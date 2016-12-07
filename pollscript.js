/* Clears radio buttons if page is refreshed, Jquery
$(document).ready(function(){
$('input[type=checkbox]').attr('checked',false);
})
*/

/* Clears radio buttons if page is refreshed */
window.onload = function() {
	var input = document.getElementsByTagName('INPUT');
	var i = 0;

	for ( i ; i < input.length ; i++ ) {
		var type = input[i].type;
		if (type === "radio") {
			input[i].checked = false;
		}
	}
};


/* define DOM elements */
var activitiesPoll = document.getElementById('activities');
var beveragesPoll = document.getElementById('beverages');
var holidayPoll = document.getElementById('holiday');


var form = document.getElementsByTagName('FORM')[0];
var submitBtn = document.getElementById('submitButton');

/*  */
var answer = '';


$(function() {
	/* tabbed panels */
	$('.tab-list').each(function() {
	var $this = $(this);
	var $tab = $this.find('li.active');
	var $link = $this.find('a');
	var $panel = $($link.attr('href'));

		$this.on('click', '.tab-control', function(e) {
			e.preventDefault();
			var $link = $(this);
			var id = this.hash;

		if (id && !$link.is('.active')) {
			$panel.removeClass('active');
			$tab.removeClass('active');

			$panel = $(id).addClass('active');
			$tab = $link.parent().addClass('active');
		}

		});
	});

	/* getting each vote 
	$('.tab-panel').each(function() { 
		var $this = $(this);
		var $checkboxes = $this.find('input[type=checkbox]');
		if ($checkboxes) {
			$checkboxes.on('click', function(e) {
				var $value = $(this).value;
				answer = $value;
				alert(answer);
			});
		}
	});
	*/
});



/* attach event to form children input, trigger on change */
form.addEventListener('change', function(e) { selectAnswer(e); }, false);

/* update answer */
function selectAnswer(e) {
	var target = e.target;
	var targetTagName = target.tagName;
	var targetId = target.id;
	var value = target.getAttribute('value');
	if (targetTagName == 'INPUT' && targetId !== 'submit') {
		answer = value;
	}
}

/* attach event to submit button, trigger on click */
submitBtn.addEventListener('click', submitAnswer, false);

/* if answer isn't an empty string:
Creates xhr, sends answer to PHP script, returns answer from PHP script, else error msg */
function submitAnswer() {
	if (answer !== '') {
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.status == 200 ) {
				document.getElementById('activities').innerHTML = xhr.responseText;
			}
		};

		xhr.open('GET','get_winter_vote.php?winter_activity='+answer, true);
		xhr.send(null);	
	} else {


		alert('No selection made.  Please make a selection.');
	}
}
