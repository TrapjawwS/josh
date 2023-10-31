mkdir env
echo "export const environment = { PASSWORD : 'cheese53' }"  > env/env.ts
- run: sh setEnvironment.sh ${{ secrets.PASSWORD }}