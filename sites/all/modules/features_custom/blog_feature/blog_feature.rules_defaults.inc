<?php
/**
 * @file
 * blog_feature.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function blog_feature_default_rules_configuration() {
  $items = array();
  $items['rules_comment_added_to_blog_post'] = entity_import('rules_config', '{ "rules_comment_added_to_blog_post" : {
      "LABEL" : "Comment added to blog post",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "rules", "comment" ],
      "ON" : { "comment_insert" : [] },
      "DO" : [
        { "mail" : {
            "to" : "lindsay@wdesign.com.au",
            "subject" : "A comment has been added to a blog post on www.lgrmg.ca",
            "message" : "A comment has been added to a blog post on www.lgrmg.ca.\\r\\n\\r\\n--------------------------------------------------\\r\\n[comment:name]\\r\\n\\r\\n[comment:comment-body]\\r\\n--------------------------------------------------\\r\\n\\r\\nView and approve\\/delete the comment here:\\r\\n[comment:url]",
            "from" : "[site:mail]",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  return $items;
}
