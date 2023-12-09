from mCamera import cCamera

def fMain( ) :

    oCamera = cCamera( verbose = True )

    oCamera.fMainLoop( )

if __name__ == '__main__' :

    try :

        fMain( )

    except Exception as e :

        raise e
