

# PHP Input Handling Vulnerabilities — Educational Examples
This repository demonstrates how improper handling of HTTP parameters and headers in PHP can lead to security vulnerabilities, including command injection.
The examples are non-operational pseudocode intended for learning and defensive cybersecurity research only.

## 1. Parameter-Based Input Injection (Concept)

Unsafe pattern (conceptual):
example.com/shell.php?cmd=<unvalidated-input>


### Pseudocode:

## Demonstrates insecure use of query parameters

```
execute_system_command( get_query_parameter("cmd") );
```

## 2. User-Agent Header Injection (Concept)

Attackers may attempt to place malicious commands inside the User-Agent header.
Example of manipulated request (conceptual):
User-Agent: <malicious commands here>

### Pseudocode:
```
command = get_request_header("User-Agent");
execute_system_command(command);    # unsafe pattern
```
##  3. Accept-Language Header Injection (Concept)

HTTP headers such as Accept-Language can also be misused when directly passed to system functions.
Conceptual request:
Accept-Language: <unvalidated-input>

### Pseudocode:
```
lang_header = get_request_header("Accept-Language");
execute_system_command(lang_header);   # unsafe pattern
```
## 4. POST Variable Injection (Concept)

Passing user input directly as a function name or command can result in arbitrary code execution.

### Pseudocode:

```
function_name = get_post_parameter("function");
argument = get_post_parameter("argument");
```

call_function(function_name, argument);    # unsafe

### ⚠️ Disclaimer
- These examples are not usable exploits.
- They are sanitized pseudocode designed solely to teach:
- How insecure input handling leads to vulnerabilities
- How attackers might abuse request parameters
- How to implement proper validation and sanitization

This repository must not be used for unauthorized testing or malicious activity.
