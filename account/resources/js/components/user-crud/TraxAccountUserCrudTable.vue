<template>

    <trax-ui-ajax-table-with-crud-actions 
        :id="id" :titles="titles" :props="props" :bus="bus" 
        :endpoint="endpoint" :edit-url="edit_url">
    </trax-ui-ajax-table-with-crud-actions>
    
</template>

<script>
    export default {
    
        props: ['bus', 'withUsername'],

        data: function() {
            var titles = [
                lang.trax_account.common.email,
                lang.trax_account.common.fullname,
                ''
            ];
            var props = [
                {source: this.email},
                {source: this.fullname, order: 'lastname'}
            ];
            if (this.withUsername) {
                titles.unshift(lang.trax_account.common.username);
                props.unshift({source: this.username, class: 'font-weight-bold'});
            }
            return {
                endpoint: app_url+"trax/ajax/account/users",
                edit_url: app_url+"trax/ui/account/user/edit",
                titles: titles,
                props: props,
                id: 'trax-account-user'
            }
        },

        methods: {
        
            // Columns rendering

            email(data, type, row, meta) {
                return this.active(row, row.email);
            },

            fullname(data, type, row, meta) {
                return this.active(row, row.data.lastname + ' ' + row.data.firstname);
            },

            username(data, type, row, meta) {
                return this.active(row, row.username);
            },

            active(row, content) {
                if (row.active) return content;
                return '<span class="trax-text-muted">' + content + '</span>';
            }
        }

    }
</script>
