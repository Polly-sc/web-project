export default {
    posts: [],
    add(item) {
        this.load()
        console.log(item)
        this.posts.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
        this.posts.push(item)
        this.posts.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
        this.save()
    },
    remove(item) {
        this.load()
        const index = this.posts.map((el) => {
            return el.id
        }).indexOf(item.id)

        this.posts.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
        this.posts.splice(index, 1)
        this.save()
        this.posts.forEach(function(item, i) {
            console.log( i + ": " + item.name )
        });
        console.log("---------")
    },
    load() {
        localStorage.clear()
        let data = localStorage.getItem('favorites')
        if (data !== null) {
            data = JSON.parse(data)
            this.posts = data.posts
        }
    },
    save() {
        localStorage.setItem('posts', JSON.stringify({
            posts: this.posts,
        }))
    }
}
