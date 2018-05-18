BSON_CURRENT_FILE=[]PHP_EXT_SRCDIR(mongodb)[/src/libmongoc/src/libbson/VERSION_CURRENT]
BSON_VERSION=$(cat $BSON_CURRENT_FILE)

dnl Ensure newline for "cut" implementations that need it, e.g. HP-UX.
BSON_MAJOR_VERSION=$( (cat $BSON_CURRENT_FILE; echo) | cut -d- -f1 | cut -d. -f1 )
BSON_MINOR_VERSION=$( (cat $BSON_CURRENT_FILE; echo) | cut -d- -f1 | cut -d. -f2 )
BSON_MICRO_VERSION=$( (cat $BSON_CURRENT_FILE; echo) | cut -d- -f1 | cut -d. -f3 )
BSON_PRERELEASE_VERSION=$(cut -s -d- -f2 $BSON_CURRENT_FILE)

AC_SUBST(BSON_VERSION)
AC_SUBST(BSON_MAJOR_VERSION)
AC_SUBST(BSON_MINOR_VERSION)
AC_SUBST(BSON_MICRO_VERSION)
AC_SUBST(BSON_PRERELEASE_VERSION)
