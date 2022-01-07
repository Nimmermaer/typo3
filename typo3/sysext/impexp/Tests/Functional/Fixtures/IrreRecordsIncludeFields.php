<?php

// Fields of record types to be included in the export
return [
    'pages' => [
        'title',
        'deleted',
        'doktype',
        'hidden',
        'perms_everybody',
    ],
    'tt_content' => [
        'CType',
        'header',
        'deleted',
        'hidden',
        't3ver_oid',
        'tx_testirreforeignfield_hotels',
        'tx_testirrecsv_hotels',
    ],
    'tx_testirrecsv_hotel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'offers',
    ],
    'tx_testirrecsv_offer' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'prices',
    ],
    'tx_testirrecsv_price' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'price',
    ],
    'tx_testirreforeignfield_hotel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'parentid',
        'parenttable',
        'parentidentifier',
        'title',
        'offers',
    ],
    'tx_testirreforeignfield_offer' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'parentid',
        'parenttable',
        'parentidentifier',
        'title',
        'prices',
    ],
    'tx_testirreforeignfield_price' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'parentid',
        'parenttable',
        'parentidentifier',
        'title',
        'price',
    ],
    'tx_testirremnattributeinline_hotel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'offers',
    ],
    'tx_testirremnattributeinline_hotel_offer_rel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'deleted',
        'hidden',
        'hotelid',
        'offerid',
        'hotelsort',
        'offersort',
        'prices',
    ],
    'tx_testirremnattributeinline_offer' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'hotels',
    ],
    'tx_testirremnattributeinline_price' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'parentid',
        'title',
        'price',
    ],
    'tx_testirremnattributesimple_hotel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'offers',
    ],
    'tx_testirremnattributesimple_hotel_offer_rel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'deleted',
        'hidden',
        'hotelid',
        'offerid',
        'hotelsort',
        'offersort',
        'quality',
        'allincl',
    ],
    'tx_testirremnattributesimple_offer' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'hotels',
    ],
    'tx_testirremm_hotel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'offers',
    ],
    'tx_testirremm_offer' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'hotels',
        'prices',
    ],
    'tx_testirremm_price' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'price',
        'offers',
    ],
    'tx_testirremnsymmetric_hotel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'sorting',
        'deleted',
        'hidden',
        'title',
        'branches',
    ],
    'tx_testirremnsymmetric_hotel_rel' => [
        'cruser_id',
        'sys_language_uid',
        'l18n_parent',
        'deleted',
        'hidden',
        'hotelid',
        'branchid',
        'hotelsort',
        'branchsort',
    ],
];
