<?php
/*
Plugin Name: Tassionomie Custom
Plugin URI: http://wpandmore.info/creare-tassionomie-wordpress/
Description: Questo plugin mi consente di aggiungere nuove tassionomie per i miei articoli e CPT
Version: 0.1
Author: Andrea Barghigiani
Author URI: http://andreabarghigiani.info
License: GPL2
*/


// Registro Tassionomia Custom
function tassionomia_custom() {

    $labels = array(
        'name'                       => _x( 'Prodotti', 'Prodotti Generali', 'text_domain' ),
        'singular_name'              => _x( 'Prodotto', 'Prodotto Generale', 'text_domain' ),
        'menu_name'                  => __( 'Prodotti', 'text_domain' ),
        'all_items'                  => __( 'Tutti i Prodotti', 'text_domain' ),
        'parent_item'                => __( 'Prodotto Parente', 'text_domain' ),
        'parent_item_colon'          => __( 'Prodotto Parente:', 'text_domain' ),
        'new_item_name'              => __( 'Nuovo Prodotto', 'text_domain' ),
        'add_new_item'               => __( 'Aggiungi Nuovo Prodotto', 'text_domain' ),
        'edit_item'                  => __( 'Modifica Prodotto', 'text_domain' ),
        'update_item'                => __( 'Aggiorna Prodotto', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separa termini con virgola', 'text_domain' ),
        'search_items'               => __( 'Cerca Prodotti', 'text_domain' ),
        'add_or_remove_items'        => __( 'Aggiungi o Rimuovi Prodotti', 'text_domain' ),
        'choose_from_most_used'      => __( 'Scegli tra i Prodotti Usati', 'text_domain' ),
        'not_found'                  => __( 'Non Trovato', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true, //false crea tag, true crea categorie
        'public'                     => true, //la tassionomia e' pubblica?
        'show_ui'                    => true, //genero una UI per gestire la tassionomia?
        'show_admin_column'          => true, //creo la colonna nei post associati?
        'show_in_nav_menus'          => true, //da selezionare nel menu?
        'show_tagcloud'              => false, //creo una widget tagcloud?
    );
    register_taxonomy( 'taxonomy', array( 'post' ), $args );

}

// Mi aggancio a 'init'
add_action( 'init', 'tassionomia_custom', 0 );
