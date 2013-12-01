<?php
/**
 * @file
 * blog_feature.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function blog_feature_taxonomy_default_vocabularies() {
  return array(
    'wp_blog_tags' => array(
      'name' => 'Blog tags',
      'machine_name' => 'wp_blog_tags',
      'description' => 'Tags to categorise blog posts',
      'hierarchy' => 1,
      'module' => 'wp_blog',
      'weight' => 0,
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
