<?php
$activity_vote = $_REQUEST['winter_activity'];

//get content of text file/ content contains previous votes
$filename = 'activities_votes.txt';
$content = file($filename);

//put content in array
$array = explode('||', $content[0]);

$snowactivities = array(
	'sledding' => $array[0],
	'snowball' => $array[1],
	'hotcocoa' => $array[2],
	'snowflakes' => $array[3]
);

if ($activity_vote) {
		$snowactivities[$activity_vote] += 1;
}

//insert votes to txt file
$insertvote = $snowactivities['sledding'].'||'.$snowactivities['snowball'].'||'.$snowactivities['hotcocoa'].'||'.$snowactivities['snowflakes'];
$fp = fopen($filename, 'w') or die('Unable to open file!');
fputs($fp,$insertvote);
fclose($fp);

// count total number of votes
function totalVotes() {
	global $snowactivities;
	$totalVotes = 0;
	foreach( $snowactivities as $activity => $activity_votes ) {
		$totalVotes += $activity_votes;
	}
	return $totalVotes;
}

//store total number of votes
$totalVotes = totalVotes();

//find % of each vote
function findpercent($activity) {
	global $totalVotes;
	$percent = round( ($activity/$totalVotes) ,3) * 100;
	return $percent;
}

//store % of each vote
$percentSledding = findpercent($snowactivities['sledding']);
$percentSnowball = findpercent($snowactivities['snowball']);
$percentHotcocoa = findpercent($snowactivities['hotcocoa']);
$percentSnowflakes = findpercent($snowactivities['snowflakes']);

//store % in an array
$percentArr = array($percentSledding, $percentSnowball, $percentHotcocoa, $percentSnowflakes);

//store names of each
$activityNameArr = array('Sledding','Snowball Throwing', 'Drinking Hot Cocoa', 'Making Paper Snowflakes');

//store number of items in $activityNameArr
$count = count($activityNameArr);
?>

<table class="table table-striped table-condensed">
	<th colspan="2"><h2>Winter Activities Poll Results:</h2></th>

<?php 
	$i = 0;
	while ($i < $count) {

echo <<<_END
		<tr>
		<td>{$activityNameArr[$i]}</td>
		<td>
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="{$percentArr[$i]}" aria-valuemin="0" aria-valuemax="100" style="width:{$percentArr[$i]}%">
				</div> &nbsp;{$percentArr[$i]}% 
			</div>
		</td>
	</tr>
_END;
	$i++;
}
?>
	<tr>
		<td>Total Votes</td>
		<td><?php echo $totalVotes; ?></td>
	</tr>
</table>