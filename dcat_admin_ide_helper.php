<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection roles
     * @property Grid\Column|Collection permissions
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection user
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection authors
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection imported
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection require
     * @property Grid\Column|Collection require_dev
     * @property Grid\Column|Collection cover
     * @property Grid\Column|Collection content_raw
     * @property Grid\Column|Collection content_html
     * @property Grid\Column|Collection content_markdown
     * @property Grid\Column|Collection is_markdown
     * @property Grid\Column|Collection is_top
     * @property Grid\Column|Collection is_hidden
     * @property Grid\Column|Collection comment
     * @property Grid\Column|Collection article_id
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection target_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection website
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection tag_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection action
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection search_num
     * @property Grid\Column|Collection key
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection article_num
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection roles(string $label = null)
     * @method Grid\Column|Collection permissions(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection user(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection authors(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection imported(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection require(string $label = null)
     * @method Grid\Column|Collection require_dev(string $label = null)
     * @method Grid\Column|Collection cover(string $label = null)
     * @method Grid\Column|Collection content_raw(string $label = null)
     * @method Grid\Column|Collection content_html(string $label = null)
     * @method Grid\Column|Collection content_markdown(string $label = null)
     * @method Grid\Column|Collection is_markdown(string $label = null)
     * @method Grid\Column|Collection is_top(string $label = null)
     * @method Grid\Column|Collection is_hidden(string $label = null)
     * @method Grid\Column|Collection comment(string $label = null)
     * @method Grid\Column|Collection article_id(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection target_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection website(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection tag_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection action(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection search_num(string $label = null)
     * @method Grid\Column|Collection key(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection article_num(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection name
     * @property Show\Field|Collection roles
     * @property Show\Field|Collection permissions
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection user
     * @property Show\Field|Collection method
     * @property Show\Field|Collection path
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection version
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection authors
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection imported
     * @property Show\Field|Collection config
     * @property Show\Field|Collection require
     * @property Show\Field|Collection require_dev
     * @property Show\Field|Collection cover
     * @property Show\Field|Collection content_raw
     * @property Show\Field|Collection content_html
     * @property Show\Field|Collection content_markdown
     * @property Show\Field|Collection is_markdown
     * @property Show\Field|Collection is_top
     * @property Show\Field|Collection is_hidden
     * @property Show\Field|Collection comment
     * @property Show\Field|Collection article_id
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection target_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection content
     * @property Show\Field|Collection email
     * @property Show\Field|Collection website
     * @property Show\Field|Collection city
     * @property Show\Field|Collection tag_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection action
     * @property Show\Field|Collection token
     * @property Show\Field|Collection search_num
     * @property Show\Field|Collection key
     * @property Show\Field|Collection value
     * @property Show\Field|Collection article_num
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection roles(string $label = null)
     * @method Show\Field|Collection permissions(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection user(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection authors(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection imported(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection require(string $label = null)
     * @method Show\Field|Collection require_dev(string $label = null)
     * @method Show\Field|Collection cover(string $label = null)
     * @method Show\Field|Collection content_raw(string $label = null)
     * @method Show\Field|Collection content_html(string $label = null)
     * @method Show\Field|Collection content_markdown(string $label = null)
     * @method Show\Field|Collection is_markdown(string $label = null)
     * @method Show\Field|Collection is_top(string $label = null)
     * @method Show\Field|Collection is_hidden(string $label = null)
     * @method Show\Field|Collection comment(string $label = null)
     * @method Show\Field|Collection article_id(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection target_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection website(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection tag_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection action(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection search_num(string $label = null)
     * @method Show\Field|Collection key(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection article_num(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     * @method \Dcat\Admin\Form\Field\Button button(...$params)
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
