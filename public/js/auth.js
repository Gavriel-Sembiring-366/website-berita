
const token = localStorage.getItem('app-token');
if (token) {
    // localStorage.removeItem('app-token');
    // // delete axios.defaults.headers.common['Authorization'];
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
}
else{
    window.location.href = '/login';
}
