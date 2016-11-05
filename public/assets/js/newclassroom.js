	function retrieveNewClassData(){
		//Gets name from modal
		var classroomName = $("#newClassRoomModal #classRoomName").val();
		var flag = true;
		
		//If a classroom with that name already exists, triggers an alert
		$("li.classrooms").each(function(){
			var text = $(this).text();
			var sameName = classroomName === text;
			if (sameName) {
				alert("A classroom with the name " + text + " already exists, please choose a different name");
				flag = false;
			}
		});
		
		//Adds new classroom if name is not already used
		if (flag) {
			$("#newClassRoomModal").modal('toggle');	
			$("#classroomList").append("<li class=\"classrooms\"><a  href=\"/classroom\">" + classroomName + "</a></li>");	
			return false;
		}	
		return false;
	}
