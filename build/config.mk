PREFIX := .

DATE=`date +%Y%m%d`
BUILD_DIR = ${PREFIX}/build
DIST_DIR = ${PREFIX}/dist
VERSION = `cd ../../../${PRODUCT_NAME} && git tag | tail -1`

