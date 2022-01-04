<?php 
 mysqli {
/* Propiedades */
int $affected_rows;
int $connect_errno;
string $connect_error;
int $errno;
array $error_list;
string $error;
int $field_count;
int $client_version;
string $host_info;
string $protocol_version;
string $server_info;
int $server_version;
string $info;
mixed $insert_id;
string $sqlstate;
int $thread_id;
int $warning_count;
/* Métodos */
__construct ([ string $host = ini_get("mysqli.default_host") [, string $username = ini_get("mysqli.default_user") [, string $passwd = ini_get("mysqli.default_pw") [, string $dbname = "" [, int $port = ini_get("mysqli.default_port") [, string $socket = ini_get("mysqli.default_socket") ]]]]]] )
autocommit ( bool $mode ) : bool
change_user ( string $user , string $password , string $database ) : bool
character_set_name ( void ) : string
close ( void ) : bool
commit ([ int $flags [, string $name ]] ) : bool
debug ( string $message ) : bool
dump_debug_info ( void ) : bool
get_charset ( void ) : object
get_client_info ( void ) : string
get_connection_stats ( void ) : bool
mysqli_stmt::get_server_info ( void ) : string
get_warnings ( void ) : mysqli_warning
init ( void ) : mysqli
kill ( int $processid ) : bool
more_results ( void ) : bool
multi_query ( string $query ) : bool
next_result ( void ) : bool
options ( int $option , mixed $value ) : bool
ping ( void ) : bool
public static poll ( array &$read , array &$error , array &$reject , int $sec [, int $usec ] ) : int
prepare ( string $query ) : mysqli_stmt
query ( string $query [, int $resultmode = MYSQLI_STORE_RESULT ] ) : mixed
real_connect ([ string $host [, string $username [, string $passwd [, string $dbname [, int $port [, string $socket [, int $flags ]]]]]]] ) : bool
escape_string ( string $escapestr ) : string
real_query ( string $query ) : bool
public reap_async_query ( void ) : mysqli_result
public refresh ( int $options ) : bool
rollback ([ int $flags [, string $name ]] ) : bool
rpl_query_type ( string $query ) : int
select_db ( string $dbname ) : bool
send_query ( string $query ) : bool
set_charset ( string $charset ) : bool
set_local_infile_handler ( mysqli $link , callable $read_func ) : bool
ssl_set ( string $key , string $cert , string $ca , string $capath , string $cipher ) : bool
stat ( void ) : string
stmt_init ( void ) : mysqli_stmt
store_result ([ int $option ] ) : mysqli_result
use_result ( void ) : mysqli_result

 ?>