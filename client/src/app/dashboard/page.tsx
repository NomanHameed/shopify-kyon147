'use client';
import { useEffect } from 'react';

export default function Testing(){
    useEffect(() => {

        fetch('http://localhost:8000/api/test').then(res=> console.log(res.json()));

            // router.push(process.env.NEXT_PUBLIC_USER_HOME_ROUTE);

    }, []);

    return (
        <div>
            <h1>ala far</h1>
        </div>
    )
}
