const user_id = localStorage.getItem('user-id');

alert(user_id)
if (user_id !== "1") {
    document.getElementById('status').disabled = true;
    
}

