# Pseudocode: demonstrates insecure function call via POST input
function_name = get_post_parameter("function");
argument = get_post_parameter("argument");

call_function( function_name, argument );
