$(function() {
    var Book = Backbone.Model.extend();

    var BookList = Backbone.Collection.extend({
        model: Book,
        url: '/books',
        last_id: null,
        loadNext: function() {
            this.fetch({ data: $.param({ start: this.last_id}), success: function() {
                booksView.render();
            } });
        }
    });


    var BookView = Backbone.View.extend({
        el: "#table_body",
        template: _.template($('#trTemplate').html()),
        render: function() {
            _.each(this.model.models, function(book){
                var data = book.toJSON();
                this.model.last_id = data.id;
                var bookTemplate = this.template(data);
                $(this.el).append(bookTemplate);
            }, this);
            return this;

        }
    });




    var books = new BookList();
    var booksView = new BookView({model: books});
    books.fetch({
        success: function() {
            booksView.render();
        }
    });
    $('#more_link').click(function() {
        books.loadNext();
    });

});