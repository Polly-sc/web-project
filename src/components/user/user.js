export default {
    name: null,
    accessToken: null,
    isAuth() {
        this.load()
        return this.accessToken !== null
    },
    login(data) {
        localStorage.setItem('user', JSON.stringify(data))
        this.name = data.name
        this.accessToken = data.accessToken
    },
    logout() {
        localStorage.removeItem('user')
        this.name = null
        this.accessToken = null
    },
    load() {
        let data = localStorage.getItem('user')
        if (data !== null && data !== '') {
            data = JSON.parse(data)
            this.name = data.name
            this.accessToken = data.accessToken
        }
    }
}
