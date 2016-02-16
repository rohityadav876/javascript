<!DOCTYPE HTML>
<html> 
	<head>
		<title>Progress Meter</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form>
			<div class="prog"></div>
			<input type="checkbox" name="progress-tasks" id="progress-task1" value="Task 1" checked required>
			<label for="progress-task1" class="progress-task">Task 1</label>
			<input type="checkbox" name="progress-tasks" id="progress-task2" value="Task 2" checked required>
			<label for="progress-task2" class="progress-task">Task 2</label>
			<input type="checkbox" name="progress-tasks" id="progress-task3" value="Task 3" required>
			<label for="progress-task3" class="progress-task">Task 3</label>
			<input type="checkbox" name="progress-tasks" id="progress-task4" value="Task 4" required>
			<label for="progress-task4" class="progress-task">Task 4</label>
			<input type="checkbox" name="progress-tasks" id="progress-task5" value="Task 5" required>
			<label for="progress-task5" class="progress-task">Task 5</label>
			<input type="checkbox" name="progress-tasks" id="progress-task6" value="Task 6" required>
			<label for="progress-task6" class="progress-task">Task 6</label>
			<label for="progress-tasks-percentage" class="progress-tasks-completed"><span>0</span><sup>%</sup> Completed</label>
			<progress id="progress-tasks-percentage" name="progress-tasks-percentage" min="0" max="100"></progress>
		</form>
	</body>
	<script type="text/javascript" src="script.js"></script>

</html>