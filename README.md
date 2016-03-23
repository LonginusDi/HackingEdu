# api-gateway

## Setup

1. Check out the repo in SourceTree
2. Install Python and include it in your PATH (Recommend 2.7.11): 
    https://www.python.org/downloads/
    https://docs.python.org/2/using/windows.html
3. Install newest node and npm
    https://docs.npmjs.com/getting-started/installing-node'
    http://tecadmin.net/upgrade-nodejs-via-npm/#
4. Install Rabbbitmq and Elang
    https://www.rabbitmq.com/install-windows.html
    http://www.erlang.org/downloads
5. Store git credentials locally
    https://git-scm.com/docs/git-credential-cache
6. Run npm start

## Json
```json
{
  "swagger": "2.0",
  "info": {
    "version": "1.0.0",
    "title": "Swagger Petstore",
    "contact": {
      "name": "Swagger API Team",
      "url": "http://swagger.io"
    },
    "license": {
      "name": "Creative Commons 4.0 International",
      "url": "http://creativecommons.org/licenses/by/4.0/"
    }
  },
  "host": "petstore.swagger.io",
  "basePath": "/api",
  "schemes": [
    "http"
  ],
  "paths": {
    "/pets": {
      "get": {
        "tags": [
          "Pet Operations"
        ],
        "summary": "finds pets in the system",
        "responses": {
          "200": {
            "description": "pet response",
            "schema": {
              "type": "array",
              "items": {
                "$ref": "#/definitions/Pet"
              }
            },
            "headers": {
              "x-expires": {
                "type": "string"
              }
            }
          },
          "default": {
            "description": "unexpected error",
            "schema": {
              "$ref": "#/definitions/Error"
            }
          }
        }
      }
    }
  },
  "definitions": {
    "Pet": {
      "type": "object",
      "required": [
        "id",
        "name"
      ],
      "properties": {
        "id": {
          "type": "integer",
          "format": "int64"
        },
        "name": {
          "type": "string"
        },
        "tag": {
          "type": "string"
        }
      }
    },
    "Error": {
      "type": "object",
      "required": [
        "code",
        "message"
      ],
      "properties": {
        "code": {
          "type": "integer",
          "format": "int32"
        },
        "message": {
          "type": "string"
        }
      }
    }
  }
}
```
