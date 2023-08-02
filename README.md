
First, thanks for giving this opportunity.
I didn't 100% refactor the code,
but all the refactored code you will easily understand my though on code formatting and principals. 

1. I prefer snake_cases to declare variables and camelCase for functions mostly in my project I use PSR-12 standards.
2. variable names should be readable. for example, $cuser is not an appropriate variable. we use $current_user or $customer_user.
2. we should not use env directly inside code because once the configuration has been cached, the .env file will not be loaded. we should declare variable in config files and use from there.
3. I notice some of the methods using is repetitive code. we should avoid that instead we can create methods and reuse that.
4. we should use laravel validation instead of creating custom. For example, inside bookingController > store .
5. I notice a query is running inside loop which creates (n+1) problem which is not the best approach it will slow the process, and we should define the relation inside model and use that relation to fetch the data.
6. I prefer to avoid nested if else condition. for example, if the condition returns earlier, I prefer to use this condition in if body instead of else.

```
// Not recommend
if($user){
// code block

return true;
}else{
return false
}


// Best Approch
if(!user){
    return false;
}

// code block

return true;

