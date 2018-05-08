<?php
namespace models;
use libs\Model;

class Bahasa_Model extends Model {

	static $table = "bahasa";
	static $lbl = ["bahasaID","nama_bahasa","extension","path_environment","compile_method","run_method"];
}