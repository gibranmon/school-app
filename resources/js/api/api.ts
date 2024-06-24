import axios from "axios";

const api = axios.create({
    baseURL: 'http://school-app.test/api',
    timeout: 1000,
    // headers: {'X-Custom-Header': 'foobar'}
});

export default api
