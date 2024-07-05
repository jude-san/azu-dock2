- created dockerfile using apache:`latestversion`|apline
- exposed port is `80`
- cmd `docker build -t imagename .`
- cmd `docker run -d -p 80:80 imagename`

## To able to push your image to docker hub follow below:

- tag your local image, make sure you create a repository first `docker tag local-image-name username/respositoryname:latest`
- push tagged image `docker push username/respositoryname:latest`

`support a good cause now!!!!!`

## Repo links

- [Docker Hub Repo](https://hub.docker.com/r/judekhay/static-web-ver2)

- [ECR Repo](https://gallery.ecr.aws/o0b3u4r8/azubi-ver2)
