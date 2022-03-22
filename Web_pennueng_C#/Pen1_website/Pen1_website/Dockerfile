#See https://aka.ms/containerfastmode to understand how Visual Studio uses this Dockerfile to build your images for faster debugging.

FROM mcr.microsoft.com/dotnet/aspnet:5.0 AS base
WORKDIR /app
EXPOSE 80
EXPOSE 443

FROM mcr.microsoft.com/dotnet/sdk:5.0 AS build
WORKDIR /src
COPY ["Pen1_website/Pen1_website.csproj", "Pen1_website/"]
RUN dotnet restore "Pen1_website/Pen1_website.csproj"
COPY . .
WORKDIR "/src/Pen1_website"
RUN dotnet build "Pen1_website.csproj" -c Release -o /app/build

FROM build AS publish
RUN dotnet publish "Pen1_website.csproj" -c Release -o /app/publish

FROM base AS final
WORKDIR /app
COPY --from=publish /app/publish .
ENTRYPOINT ["dotnet", "Pen1_website.dll"]