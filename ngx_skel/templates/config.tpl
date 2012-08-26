ngx_addon_name=ngx_http_%NAME%_module
HTTP_MODULES="$HTTP_MODULES ngx_http_%NAME%_module"
NGX_ADDON_SRCS="$NGX_ADDON_SRCS $ngx_addon_dir/src/ngx_http_%NAME%_module.c"
#NGX_ADDON_DEPS="$NGX_ADDON_DEPS $ngx_addon_dir/src/ngx_http_%NAME%_module.h"
#CORE_LIBS="$CORE_LIBS -lm"

